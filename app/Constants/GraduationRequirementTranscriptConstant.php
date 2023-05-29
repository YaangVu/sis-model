<?php
/**
 * @Author im.phien
 * @Date   Mar 09, 2023
 */

namespace YaangVu\SisModel\App\Constants;

class GraduationRequirementTranscriptConstant
{
    const ENG     = 'ENG';
    const MATH    = 'MATH';
    const SCI     = 'SCI';
    // const SCO     = 'SCO';

    const SOC     = 'SOC';
    const PE_HLTH = 'PE/HLTH';
    const LANG    = 'LANG';
    const ART     = 'ART';
    const ELC     = 'ELC';

    const ALL = [
      self::ENG,
      self::MATH,
      self::SCI,
      // self::SCO,
      self::SOC,
      self::PE_HLTH,
      self::LANG,
      self::ART,
      self::ELC
    ];
}